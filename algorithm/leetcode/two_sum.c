#include <stdlib.h>

int* twoSum(int* nums, int numsSize, int target) {
    int low = 0,high = numsSize - 1;
    
    int *idx = mallac(2*sizeof(int));
    if (numsSize <=1) 
        return idx;
    
    while(low < high) {
        if (nums[low] + nums[high] == target) {
            idx[0] = low;
            idx[1] = high;
        }
        low++;
        high--;
    }
    return idx;
}

int main() {

    int nums[4] = {2,7,11,15};
    int *n = &nums;
    int numsSize = 4;
    int *idx = malloc(sizeof(int) * 2);

    idx = twoSum(n, 4,9);

}

