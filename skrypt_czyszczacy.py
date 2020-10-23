import glob
import pandas as pd

# get data file names
path ='csv_parts'
filenames = glob.glob(path + "/*.csv")
dfs = []
for filename in filenames:
    dfs.append(pd.read_csv(filename))
# Concatenate all data into one DataFrame
big_frame = pd.concat(dfs, ignore_index=True)
big_frame = big_frame.drop_duplicates(subset=['PRODUCT_ID', 'TITLE'], keep='first')
big_frame = big_frame[big_frame.TITLE != 'ERROR']
big_frame = big_frame[big_frame.TITLE != 'TITLE']
big_frame.to_csv("products.csv")
print(big_frame)


